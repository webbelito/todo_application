<!-- Create Task Modal -->
    <div class="modal fade" id="createTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create new Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="/tasks" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group">
                    <label for="example-text-input">Title</label>
                    <input class="form-control" type="text" id="taskTitleInput" name="title" required>
                    </div>

                    <div class="form-group">
                    <label for="taskDescriptionTextarea">Description</label>
                    <textarea class="form-control" id="taskDescriptionTextarea" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                    <label for="taskPrioritySelect">Priority</label><br>
                    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="taskPrioritySelect" name="priority">
                    <option value="1" class="bg-danger">Critical</option>
                    <option value="2" class="bg-warning">High</option>
                    <option selected value="3" class="bg-info">Medium</option>
                    <option value="4" class="bg-success">Low</option>
                    </select>
                    </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>

                    </form> 
                     
                </div>
            </div>
        </div>
    </div>
