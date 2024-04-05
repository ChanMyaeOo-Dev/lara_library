<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function calculateFine($transaction, $fine_rate)
    {
        if ($transaction->is_returned) {
            $dueDate = Carbon::parse($transaction->due_date, "Asia/Yangon");
            $returnDate = Carbon::parse($transaction->returned_at, "Asia/Yangon");

            $diff = $returnDate->diffInDays($dueDate);

            if ($returnDate > $dueDate) {
                $fine = $diff * $fine_rate;
                return $fine;
            } else {
                return null;
            }
        } else {
            $currentDateTime = Carbon::now("Asia/Yangon");
            $dueDate = Carbon::parse($transaction->due_date, "Asia/Yangon");

            $diff = $currentDateTime->diffInDays($dueDate);

            if ($currentDateTime > $dueDate) {
                $fine = $diff * $fine_rate;
                return $fine;
            } else {
                return null;
            }
        }
    }
}
