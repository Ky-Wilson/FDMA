<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    // Specify the table name (since it's 'projets' instead of default 'projet')
    protected $table = 'projets';

    // Define fillable fields for mass assignment
    protected $fillable = [
        'titre',
        'description',
        'categorie',
        'lieu',
        'image_principale',
        'galerie_images',
        'details',
        'date_debut',
        'date_fin',
        'statut',
        'budget',
        'client',
        'featured',
        'actif',
    ];

    // Cast fields to specific types
    protected $casts = [
        'categorie' => 'string', // Enum: commercial, residential, healthcare
        'statut' => 'string', // Enum: en_cours, termine, suspendu
        'galerie_images' => 'array', // JSON field cast to array
        'date_debut' => 'date',
        'date_fin' => 'date',
        'budget' => 'decimal:2',
        'featured' => 'boolean',
        'actif' => 'boolean',
    ];

    // Optional: Define default values (if needed)
    protected $attributes = [
        'statut' => 'termine',
        'featured' => false,
        'actif' => true,
    ];

    // Optional: Scope for active projects
    public function scopeActive($query)
    {
        return $query->where('actif', true);
    }

    // Optional: Scope for featured projects
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    // Optional: Accessor for formatted budget
    public function getFormattedBudgetAttribute()
    {
        return $this->budget ? number_format($this->budget, 2, ',', ' ') . ' €' : null;
    }

    // Optional: Accessor for main image URL
    public function getImagePrincipaleUrlAttribute()
    {
        return $this->image_principale ? asset('storage/' . $this->image_principale) : asset('assets/site/images/projects/default.jpg');
    }

    // Optional: Accessor for gallery images URLs
    public function getGalerieImagesUrlsAttribute()
    {
        if (!$this->galerie_images) {
            return [];
        }
        return array_map(function ($image) {
            return asset('storage/' . $image);
        }, $this->galerie_images);
    }
}