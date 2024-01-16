<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;

class VoteController extends Controller
{
    public function voteProgramme(Request $request, $programmeId, $type)
    {
        $programme = Programme::find($programmeId);

        if (!$programme) {
            // Gérer le cas où le programme n'est pas trouvé
            return response()->json(['error' => 'Programme not found'], 404);
        }

        // Utilisez la méthode increment pour mettre à jour les likes et dislikes
        if ($type === 'like') {
            $programme->increment('likes');
        } elseif ($type === 'dislike') {
            $programme->increment('dislikes');
        } else {
            // Gérer le cas où le type n'est ni 'like' ni 'dislike'
            return response()->json(['error' => 'Invalid vote type'], 400);
        }

        // Retournez les nouveaux compteurs de likes et dislikes
        return response()->json(['likes' => $programme->likes, 'dislikes' => $programme->dislikes]);
    }
}
