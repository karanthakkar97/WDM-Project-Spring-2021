<!DOCTYPE html>
<html>

<head>
    <title>
        operation
    </title>
    <link rel="stylesheet" href="{{ url('../styles/stylesADM.css') }}" />
</head>

<body>
    <table>
        <tr>
            <td>
                <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                    <div>
                        <label>Immigrant*</label><label class="validation-error hide" id="fullNameValidationError">This field is required.</label>
                        <input type="text" name="immigrant" id="immigrant">
                    </div>
                    <div>
                        <label>Places_to_visit</label>
                        <input type="text" name="places_to_visit" id="places_to_visit">
                    </div>
                    <div>
                        <label>Schools</label>
                        <input type="text" name="schools" id="schools">
                    </div>
                    <div>
                        <label>Hospitals</label>
                        <input type="text" name="hospitals" id="hospitals">
                    </div>
                    <div  class="form-action-buttons">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </td>
            <td>
                <table class="list" id="List">
                    <thead>
                        <tr>
                            <th>Immigrant</th>
                            <th>Places_to_visit</th>
                            <th>Schools</th>
                            <th>Hospitals</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <script src="../scripts/scriptADM.js"></script>
</body>

</html>