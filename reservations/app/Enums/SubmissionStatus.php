<?php

namespace App\Enums;

enum SubmissionStatus: string
{
    case STATUS_PENDING = 'pending';
    case STATUS_APPROVED = 'approved';
    case STATUS_REJECTED = 'rejected';
}
