<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';
    public bool $success = false;

    protected array $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        // Here we would typically send an email or save to DB
        // Mail::to('admin@example.com')->send(new ContactMessage($this->name, $this->email, $this->message));

        $this->success = true;
        $this->reset(['name', 'email', 'message']);
        
        session()->flash('message', 'Thank you for your message. I will get back to you soon!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
