<style>
    .profile {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .profile img {
        max-width: 100%;
        border-radius: 50%;
    }
</style>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="profile text-center">
                    <img src="https://scontent.fmnl13-2.fna.fbcdn.net/v/t39.30808-6/434752149_1600503454098494_7607423776117740342_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE4hSqDm6cj3DaQ7EvWHu65osxantwmN4OizFqe3CY3gyLStXTD-s38bbgS6K36L2Rl7WQqp6lrkYxC6HAlhIWb&_nc_ohc=Jrdri9hqW58Ab7khb6g&_nc_ht=scontent.fmnl13-2.fna&oh=00_AfB7jZA9iCpjylRf-MRJMxDyE9jIMY1RzobgcewaLFieow&oe=661D2460" alt="Profile Picture" class="mb-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p><a class="link-opacity-10-hover" href="https://github.com/Luc-re-sia">
                                GITHUB</a></p>
                            <p><a class="link-opacity-10-hover" href="https://www.facebook.com/LUCRESIA1526/">
                                FACEBOOK</a></p>
                        </li>

                    </ul>
                    <div class="container">
                        <form action="{{route('logout')}}" method="GET">

                            <div class="mb-3 form-check">
                                <button type="submit" class="btn btn-primary">LOGOUT</button>
                            </div>
                        </form>
                    </div>
                   </div>
            </div>
        </div>
    </div>