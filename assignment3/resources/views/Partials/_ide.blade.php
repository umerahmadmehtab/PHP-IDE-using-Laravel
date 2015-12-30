<div class="code">
    <form action="{{url('php-ide')}}" {{--action='{{url("test")}}'--}} method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <textarea placeholder="your code here" cols="10" rows="20" name="code" class="form-control" required></textarea>
        </div>

        <input type="submit" value="Compile" name="compile" class="btn btn-danger">
    </form>
</div>