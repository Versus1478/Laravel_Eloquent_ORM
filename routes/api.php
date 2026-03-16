<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('notes/stats/status', [NoteController::class, 'statsByStatus']);
Route::get('notes/pinned', [NoteController::class, 'pinned']);
Route::get('notes-actions/search', [NoteController::class, 'search']);
Route::patch('notes/actions/archive-old-drafts', [NoteController::class, 'archiveOldDrafts']);
Route::get('users/{user}/notes', [NoteController::class, 'userNotesWithCategories']);

Route::apiResource('notes', NoteController::class);
Route::apiResource('categories', CategoryController::class);
