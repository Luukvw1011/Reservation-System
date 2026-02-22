# PROJECT Notes

This file tracks domain decisions and clarified meanings used troughout the whole project.

## Restaurant Status (`restaurants.status`)

Status represents **submission/review state**, not operational open/closed state.

- `pending`: Restaurant was submitted by an owner and is waiting for platform review.
- `approved`: Restaurant submission was accepted.
- `rejected`: Restaurant submission was declined.

### Source Context

- New submissions are created with `pending` in `app/Livewire/Auth/OwnerRegisterForm.php`.
- Allowed values are defined in `app/Enums/SubmissionStatus.php`.
- Database enum values are set in `database/migrations/2025_09_24_191849_add_owner_fields_to_restaurants_table.php`.
- Owner registration copy indicates manual follow-up/review in `resources/views/pages/auth/owner-register-page.blade.php`.

### Current Implementation Note

The codebase currently sets `pending` on create, but does not yet implement explicit approval/rejection workflow logic.
