<!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-signin role="form" method="POST" action="{{ route('logout') }}">
            {{ csrf_field() }}
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log out</button>           
        </form>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        </div>

        <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#createTaskModal">Create Task</button>

    </nav>   