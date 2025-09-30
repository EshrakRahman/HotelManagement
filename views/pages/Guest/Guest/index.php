<div class="row">
    <div class="col-12">
        <div class="card" data-table data-table-rows-per-page="8">
            <div class="card-header border-light justify-content-between d-flex align-items-center">
                <h4 class="fs-xl fw-bold m-0">Guests</h4>

                <div class="d-flex gap-2">
                    <div class="app-search">
                        <input data-table-search type="search" class="form-control" placeholder="Search guest name...">
                        <i data-lucide="search" class="app-search-icon text-muted"></i>
                    </div>
                    <a href="<?= $base_url ?>/guest/addGuest" class="btn btn-danger">
                        <i data-lucide="plus" class="fs-sm me-2"></i> Add Guest
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-custom table-centered table-select table-hover w-100 mb-0">
                    <thead class="bg-light align-middle bg-opacity-25 thead-sm">
                        <tr class="text-uppercase fs-xxs">
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>ID Number</th>
                            <th>Tags</th>
                            <th>Special Requests</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($guests)): ?>
                            <?php foreach ($guests as $index => $guest): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td>
                                        <?php if (!empty($guest['photo'])): ?>
                                            <img src="<?= $base_url . $guest['photo'] ?>" alt="Guest Photo" class="rounded-circle" width="50" height="50" style="object-fit:cover;">
                                        <?php else: ?>
                                            <span class="text-muted">No Photo</span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= htmlspecialchars($guest['name']) ?></td>
                                    <td><?= htmlspecialchars($guest['email']) ?></td>
                                    <td><?= htmlspecialchars($guest['phone']) ?></td>
                                    <td><?= htmlspecialchars($guest['id_number']) ?></td>
                                    <td><?= htmlspecialchars($guest['tags']) ?></td>
                                    <td><?= htmlspecialchars($guest['special_requests']) ?></td>
                                    <td><?= htmlspecialchars($guest['created_at']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" class="text-center text-muted">No guests found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="card-footer border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div data-table-pagination-info="guests"></div>
                    <div data-table-pagination></div>
                </div>
            </div>
        </div>
    </div>
</div>
