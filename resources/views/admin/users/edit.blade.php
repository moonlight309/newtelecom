<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Edit Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name"
                            ng-model="user.name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email" name="email"
                            ng-model="user.email">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" ng-click="update(user.id)">Update</button>
            </div>
        </div>
    </div>
</div>
