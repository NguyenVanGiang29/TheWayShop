    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <form action="{{ route('search') }}" method="GET">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input  type="text" class="form-control" placeholder="Tìm kiểm..." name="keyword">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
            </form>
        </div>
    </div>
    <!-- End Top Search -->