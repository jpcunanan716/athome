<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List House</title>
</head>
<body>
    <h1>List House</h1>
    <form method = "post" action="{{route('save')}}">
        @csrf
        @method('post')
        <div>
            <label>House Name</label>
            <input type = "text" name = "houseName" placeholder = "House Name" />
        </div>
        <div>
            <label>House No./Building No., Street</label>
            <input type = "text" name = "houseNumberStreet" placeholder = "House No./Building No., Street" />
        </div>
        <div>
            <label>Province</label>
            <input type = "text" name = "province" placeholder = "Province" />
        </div>
        <div>
            <label>Town/City</label>
            <input type = "text" name = "city" placeholder = "City" />
        </div>
        <div>
            <label>Barangay</label>
            <input type = "text" name = "barangay" placeholder = "Barangay" />
        </div>
        <div>
            <label>Zip Code</label>
            <input type = "text" name = "zipCode" placeholder = "Zip Code" />
        </div>
        <div>
            <label>Square Meters</label>
            <input type = "text" name = "squareMeters" placeholder = "Square Meters" />
        </div>
        <div>
            <label>Floors</label>
            <input type = "text" name = "floors" placeholder = "floors" />
        </div>
        <div>
            <label>Rooms</label>
            <input type = "text" name = "rooms" placeholder = "rooms" />
        </div>
        <div>
            <label>Bathrooms</label>
            <input type = "text" name = "bathrooms" placeholder = "bathrooms" />
        </div>
        <div>
            <label>Backyard</label>
            <select name = "backyard" placeholder = "backyard">
                <option value = "1"> Yes </option>
                <option value = "0"> No </option>
            </select>
        </div>
        <div>
            <label>Basement</label>
            <select name = "basement" placeholder = "basement">
                <option value = "1"> Yes </option>
                <option value = "0"> No </option>
            </select>
        </div>
        <div>
            <label>attic</label>
            <select name = "attic" placeholder = "attic">
                <option value = "1"> Yes </option>
                <option value = "0"> No </option>
            </select>
        </div>
        <div>
            <label>Price</label>
            <input type = "text" name = "price" placeholder = "price" />
        </div>
        <div>
            <label>Furnished</label>
            <select name = "furnished" placeholder = "furnished">
                <option value = "1"> Yes </option>
                <option value = "0"> No </option>
            </select>
        </div>
        <div>
            <label>Description</label>
            <input type = "text" name = "description" placeholder = "description" />
        </div>
        <div>
            <input type = "submit" value = "Create a House Listing" />
        </div>
</body>
</html>