# Owner Dashboard Epic Tracker

This file tracks the Owner Dashboard v1 work on the single epic branch.

## Scope (v1)

- Registered Restaurants
- Today's Reservations
- Occupancy
- Upcoming Reservations

## Component Checklist

- [ ] `RegisteredRestaurantsCard` (Livewire)
- [ ] `TodaysReservationsCard` (Livewire)
- [ ] `OccupancyCard` (Livewire)
- [ ] `UpcomingReservationsCard` (Livewire)
- [ ] Dashboard page composition in `resources/views/owner/dashboard.blade.php`

## Optional / Later

- [ ] `UserSummaryHeader` (top user section)
- [ ] Parent `OwnerDashboardPage` Livewire component (only when shared state/cross-card interactions are needed)

## Suggested Build Order

1. Shared metric/service layer (queries + DTOs)
2. Registered Restaurants card
3. Today's Reservations card
4. Occupancy card
5. Upcoming Reservations card
6. Page layout and final polish

## Definition of Done (v1)

- [ ] All 4 cards render on the owner dashboard
- [ ] Data is owner-scoped (no cross-owner leakage)
- [ ] Empty/loading/error states exist per card
- [ ] Tests added for metric logic and card rendering
