
@if(count($tasks) > 0)

<!-- Delete Task Modal -->
    <div class="modal fade" id="deleteTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
            

                <div class="modal-body">


                <i class="fa fa-exclamation-triangle warning-sign text-warning col-sm-12" aria-hidden="true"></i>

                    <h2 style="text-align: center;">You're about to delete a task</h2>
                    <p class="text-danger" style="text-align: center;"> You will not be able to recover this task!</p>
                    <h4 style="text-align: center;">{{ $task->title }}</h4>



                    <form action="/tasks/{{ $task->id }}" method="POST">

                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </div>

                    </form>  

                </div>
            </div>
        </div>
    </div>
@endif
