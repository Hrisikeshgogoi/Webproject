<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Notice</title>
  </head>
  <body>
      <center><h3>Send Notice Form</h3></center>
      <br>
      <div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label>To Whom:</label>
              <select class="form-control" name="to_whom">
              <option>To All</option>
                <option>To Class Nursry</option>
                <option>To Class Kg</option>
                <option>To Class 1</option>
                <option>To Class 2</option>
                <option>To Class 3</option>
                <option>To Class 4</option>
                <option>To Class 5</option>
                <option>To Class 6</option>
                <option>To Class 7</option>
                <option>To Class 8</option>
                <option>To Class 9</option>
                <option>To Class 10</option>
              </select>
          </div>
          <div class="form-group">
            <label>Post Date:</label>
            <input type="date" class="form-control" name="post_date">
          </div>
          <div class="form-group">
            <label>Subject:</label>
            <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
          </div>
          <div class="form-group">
            <label>Attachment (PDF)</label>
            <input type="file" class="form-control" name="file" placeholder="Enter Subject">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea name="message" rows="8" cols="80" class="form-control" placeholder="Type your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary"name="send_notice">Send Notice</button>
        </form>
      </div>
  </body>
</html>