<?php

namespace App\Actions;

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
            'photos' => [
                [
                    'title' => 'Neon Nights',
                    'category' => 'Urban',
                    'url' => 'https://images.unsplash.com/photo-1542451313056-b7c8e626645f?q=80&w=800&auto=format&fit=crop',
                ],
                [
                    'title' => 'Mountain Peak',
                    'category' => 'Landscape',
                    'url' => 'https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=800&auto=format&fit=crop',
                ],
                [
                    'title' => 'Morning Portrait',
                    'category' => 'Portrait',
                    'url' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=800&auto=format&fit=crop',
                ],
                [
                    'title' => 'City Scape',
                    'category' => 'Urban',
                    'url' => 'https://images.unsplash.com/photo-1449844908441-8829872d2607?q=80&w=800&auto=format&fit=crop',
                ],
            ]
        ];
    }
}
