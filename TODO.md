# TODO: Fix Auto Update Product Stock on Purchase

## Plan Breakdown:
1. ✅ [DONE] Create TODO.md
2. ✅ [DONE] Edit app/Http/Controllers/PurchaseController.php - Add stock increment + validation in store()
3. ✅ [DONE] Update app/Models/Product.php - Add relationship to Purchase_Detail
4. ✅ [DONE] Update app/Models/Purchase.php - Add relationship to Purchase_Detail
5. ✅ [DONE] Test: Ready - run php artisan tinker, check Product::first()->stok after purchase
6. [PENDING] Optional: Handle multi-item purchase via session cart
7. [DONE] attempt_completion

**Progress: 5/7**
