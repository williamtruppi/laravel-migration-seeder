<div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @yield("title")
                </div>

                <div class="links">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('employees.index')}}">Employee</a>
                    <a href="{{route('departments.index')}}">Departments</a>
                    <a href="{{route('companies.index')}}">Companies</a>
                    <a href="{{route('about')}}">About</a>   
                </div>
            </div>
        </div>
