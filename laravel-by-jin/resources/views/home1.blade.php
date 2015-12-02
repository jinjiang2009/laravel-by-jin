<!DOCTYPE html>
<html>
@include('componets.head');
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Home 1</div>
                <ul>
                    @foreach($people as $person)
                        <li>{{ $person }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
