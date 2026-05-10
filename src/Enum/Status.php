<?php

namespace App\Config;

enum Status: string
{
    case Draft          = 'draft';
    case PendingPayment = 'pending_payment';
    case Paid           = 'paid';
}
