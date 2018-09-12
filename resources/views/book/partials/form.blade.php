<form method="POST" action="/admin">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Book Name" required>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" placeholder="10.00" required>
    </div>
    <div class="form-group">
        <label for="cover">Cover</label>
        <input type="url" name="cover" class="form-control" placeholder="http://full/image/url.com">
    </div>
    <div class="form-group">
        <label for="colour">Colour</label>
        <input type="text" name="colour" class="form-control" placeholder="Book colour">
    </div>
    <div class="form-group">
        <label for="size">Size</label>
        <input type="text" name="size" class="form-control" placeholder="Book Size">
    </div>
    <div class="form-group">
        <label for="theme">Theme</label>
        <input type="text" name="theme" class="form-control" placeholder="Book Theme">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
