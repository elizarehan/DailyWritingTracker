<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Project</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
  <h1>Add Project</h1>
  <form id="addProject" action="../../backend/controllers/insertProjects.php" method="POST">
    <label for="title">Title: </label>
    <input
      id="title"
      name="title"
      type="text"
      required
    />
    <br>
    <label for="cover">Cover: </label>
      <input
        id="cover"
        name="cover"
        type="image"
      />
    <label for="curr_words">Current Word Count: </label>
    <input
      id="curr_words"
      name="curr_words"
      type="number"
      />
    <label for="goal_words">Goal Word Count: </label>
    <input
      id="goal_words"
      name="goal_words"
      type="number"
    />
    <label for="deadline">Deadline: </label>
    <input
      id="deadline"
      name="deadline"
      type="date"
    />
    <!-- extra info -->
      <label for="draft_link">Project Link: </label>
      <input
        id="draft_link"
        name="draft_link"
        type="url"
      />
     <label for="description">Description: </label>
      <textarea
        id="description"
        name="description"
        rows="5"
        cols="30"
        placeholder="Describe your project...">
      </textarea>
     <label for="form">Form / Medium: "</label>
      <select name="form" id="form">
              <option value="" selected disabled>Select</option>
              <option value="novel">Novel</option>
              <option value="poem">Poem / Poetry Collection</option>
              <option value="short">Short Story</option>
              <option value="screenplay">Screenplay</option>
              <option value="stageplay">Stageplay</option>
              <option value="novella">Novella</option>
              <option value="nonfiction">Non-Fiction</option>
              <option value="other">Other</option>
      </select>
    <label for="genre">Genre: </label>
    <select id="genre" name="genre">
      <option value="" selected disabled>Select</option>
      <option value="sciFi">Sci-Fi</option>
      <option value="fantasy">Fantasy</option>
      <option value="mystery">Mystery</option>
      <option value="romance">Romance</option>
      <option value="historical">Historical</option>
      <option value="thriller">Thriller/Suspense</option>
      <option value="horror">Horror</option>
      <option value="literary">Literary Fiction</option>
      <option value="other">Other</option>
    </select>
    <label for="draft_num">Draft #: </label>
    <input
      id="draft_num"
      name="draft_num"
      type="text"
    />
    <label for="notes">Notes: </label>
    <textarea
        id="description"
        name="description"
        rows="5"
        cols="30"
        placeholder="Notes...">
    </textarea>
    <input type="submit" value="Add"/>
  </form>
    
</body>
</html>
