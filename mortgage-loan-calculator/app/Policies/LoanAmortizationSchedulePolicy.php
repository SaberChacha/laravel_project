<?php

namespace App\Policies;

use App\Models\LoanAmortizationSchedule;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LoanAmortizationSchedulePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, LoanAmortizationSchedule $loanAmortizationSchedule): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, LoanAmortizationSchedule $loanAmortizationSchedule): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, LoanAmortizationSchedule $loanAmortizationSchedule): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, LoanAmortizationSchedule $loanAmortizationSchedule): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, LoanAmortizationSchedule $loanAmortizationSchedule): bool
    {
        //
    }
}
