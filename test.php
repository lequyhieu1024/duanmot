<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Radio Input in Bootstrap Modal</title>
</head>
<body>

    <!-- Button để mở pop-up -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Open Radio Input Modal
    </button>

    <!-- Pop-up Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Select an Option</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form>
                        <!-- Radio Inputs -->
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="options" id="option1" value="option1">
                            <label class="form-check-label" for="option1">Option 1</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="options" id="option2" value="option2">
                            <label class="form-check-label" for="option2">Option 2</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="options" id="option3" value="option3">
                            <label class="form-check-label" for="option3">Option 3</label>
                        </div>

                        <!-- Close Button -->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional: Include Bootstrap JS and Popper.js for Bootstrap functionality -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
