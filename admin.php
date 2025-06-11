<?php
include('templates/header.php');
?>

<section class="container admin-section">
    <h1>Welcome admin</h1>
    <br>
    <h2>Users</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Created At</th>            
            <th>Delete</th>
            <th>Edit</th>
            <th>Show</th>
        </tr>
    </table>
</section>

<section class="container admin-section">
    <h2>Contacts</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>            
            <th>Delete</th>
            <th>Edit</th>
            <th>Show</th>
        </tr>
    </table>
</section>

<section class="container admin-section">
    <h2>Faqs</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Website URL</th>
            <th>Phone Number</th>            
            <th>Delete</th>
            <th>Edit</th>
            <th>Show</th>
        </tr>
    </table>
</section>

<?php
include('templates/footer.php');
?>