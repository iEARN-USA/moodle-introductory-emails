## About

We built this tool for internal use at iEARN-USA to help streamline the onboarding process for students in our Moodle courses. After uploading users from a CSV file using Moodle's [Upload Users](https://docs.moodle.org/en/Upload_users) tool, we wanted to send them an introductory email from their instructions with some information about the course and their username and password.

## Requirements

PHP 5 and a Mandrill API key with the [Mandrill PHP API Client](https://mandrillapp.com/api/docs/index.php.html) installed in `/api/mandrill`.

## Formatting

The CSV must be created with the following columns (leave out the header row when you paste it in):

Username      | Password      | First Name    | Last Name     | Email
------------- | ------------- | ------------- | ------------- | -------------
john_doe      | 123456        | John          | Doe           | john.doe@example.net

## Template

To create a new template file just add a new `.txt` file to the `template/` directory. Inside the file, make sure to add curly braces around all variables. For example, `{firstname}` for user's first name, or `{email}` for their email, etc. To modify the email template, edit `template/your_template_file.txt`.

## License

This tool is released under the [GNU GPL v3.0](https://gnu.org/licenses/old-licenses/gpl-2.0.txt).