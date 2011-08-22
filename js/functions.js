/**
 * Created by JetBrains PhpStorm.
 * User: jwfoxjr
 * Date: 8/21/11
 * Time: 11:37 PM
 * To change this template use File | Settings | File Templates.
 */

function validateNonEmpty(inputField, helpText) {

    // See if the input value contains any text.

    if (inputField.value.length == 0) {

        // The data is invalid, so set the help message

        if (helpText != null)
            helpText.innerHTML = "Please enter a value.";
        return False;
    }

    else {

        // The data is OK, so clear the help message

        if (helpText != null)
            helpText.innerHTML = "";
        return True;
    }
}