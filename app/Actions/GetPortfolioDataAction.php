<?php

namespace App\Actions;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

/**
 * Class GetPortfolioDataAction
 * 
 * Bertanggung jawab untuk mengambil semua data portofolio (biodata, skill, project web, dan galeri foto).
 * Action ini memastikan pemisahan logika bisnis dari Controller sesuai arsitektur Action-Oriented Monolith.
 */
class GetPortfolioDataAction
{
    /**
     * Mengeksekusi pengambilan data portofolio.
     * Mengembalikan array yang berisi informasi personal, skills, project, dan foto.
     *
     * @return array<string, mixed> Data portofolio yang siap ditampilkan ke view.
     */
    public function execute(): array
    {
        return [
            'personal' => [
                'name' => 'Ismail Risky Rahmansyah',
                'roles' => ['Programmer', 'Photographer'],
                'tagline' => 'Crafting elegant code and capturing stunning moments.',
                'about' => 'I am a passionate creative professional who bridges the gap between technology and art. As a programmer, I love building scalable web applications. As a photographer, I aim to freeze beautiful moments in time.',
                'email' => 'ismailrisky01@gmail.com',
                'location' => 'Indonesia',
            ],
            'skills' => [
                'Programming' => ['Laravel', 'PHP', 'TailwindCSS', 'Alpine.js', 'Livewire', 'JavaScript'],
                'Photography' => ['Portrait', 'Landscape', 'Photo Editing', 'Lightroom', 'Adobe Photoshop'],
            ],
            'projects' => [
                [
                    'title' => 'E-Commerce Platform',
                    'description' => 'A fully functional online store built with TALL Stack, featuring real-time inventory and seamless checkout process.',
                    'tags' => ['Laravel', 'Livewire', 'TailwindCSS'],
                    'link' => '#',
                ],
                [
                    'title' => 'Social Media Automation',
                    'description' => 'Chrome extension and REST API integrated system for automating posts to various platforms.',
                    'tags' => ['JavaScript', 'Python', 'API'],
                    'link' => '#',
                ],
            ],
            'photos' => $this->fetchPexelsPhotos(),
        ];
    }

    /**
     * Mengambil foto dari Pexels API.
     * Menggunakan Collection ID jika tersedia, jika tidak gunakan curated photos.
     * Hasil di-cache selama 1 jam untuk menghemat API quota.
     *
     * @return array<int, array{title: string, category: string, url: string, pexels_url: string, photographer: string}>
     */
    private function fetchPexelsPhotos(): array
    {
        $apiKey = env('PEXELS_API_KEY');
        $collectionId = env('PEXELS_COLLECTION_ID');

        if (empty($apiKey)) {
            return $this->fallbackPhotos();
        }

        // Cache selama 1 jam agar tidak boros API quota. Key digabung dengan Collection ID agar cache reset saat ID berubah.
        $cacheKey = 'pexels_photos_' . md5($collectionId . $apiKey);

        return Cache::remember($cacheKey, 3600, function () use ($apiKey, $collectionId) {
            try {
                if (!empty($collectionId)) {
                    // Ambil dari Collection milik user
                    $response = Http::withHeaders([
                        'Authorization' => $apiKey,
                    ])->get("https://api.pexels.com/v1/collections/{$collectionId}", [
                        'type' => 'photos',
                        'per_page' => 8,
                    ]);
                } else {
                    // Fallback: ambil curated photos
                    $response = Http::withHeaders([
                        'Authorization' => $apiKey,
                    ])->get('https://api.pexels.com/v1/curated', [
                        'per_page' => 8,
                    ]);
                }

                if ($response->failed()) {
                    return $this->fallbackPhotos();
                }

                $data = $response->json();
                $photos = $data['media'] ?? $data['photos'] ?? [];

                return collect($photos)->map(function ($photo) {
                    return [
                        'title' => $photo['alt'] ?? 'Untitled',
                        'category' => 'Photography',
                        'url' => $photo['src']['large'] ?? $photo['src']['medium'] ?? '',
                        'pexels_url' => $photo['url'] ?? '#',
                        'photographer' => $photo['photographer'] ?? '',
                    ];
                })->toArray();
            } catch (\Exception $e) {
                return $this->fallbackPhotos();
            }
        });
    }

    /**
     * Foto fallback jika Pexels API tidak tersedia.
     */
    private function fallbackPhotos(): array
    {
        return [
            [
                'title' => 'Neon Nights',
                'category' => 'Urban',
                'url' => 'https://images.unsplash.com/photo-1542451313056-b7c8e626645f?q=80&w=800&auto=format&fit=crop',
                'pexels_url' => '#',
                'photographer' => 'Ismail Risky Rahmansyah',
            ],
            [
                'title' => 'Mountain Peak',
                'category' => 'Landscape',
                'url' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=800&auto=format&fit=crop',
                'pexels_url' => '#',
                'photographer' => 'Ismail Risky Rahmansyah',
            ],
            [
                'title' => 'Morning Portrait',
                'category' => 'Portrait',
                'url' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=800&auto=format&fit=crop',
                'pexels_url' => '#',
                'photographer' => 'Ismail Risky Rahmansyah',
            ],
            [
                'title' => 'City Scape',
                'category' => 'Urban',
                'url' => 'https://images.unsplash.com/photo-1449844908441-8829872d2607?q=80&w=800&auto=format&fit=crop',
                'pexels_url' => '#',
                'photographer' => 'Ismail Risky Rahmansyah',
            ],
        ];
    }
}
