<?php


session_start();
include 'db.php';
// Check if user is logged in
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Homepage</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">My Website</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
          </li>

        </ul>
      </div>
    </div>
    
  </nav>

  <div class="container mt-5">
    <h1>Welcome to My private page!</h1>
    <p>
In the forgotten city of Aerilon, bathed in the perpetual twilight of a gas giant's shadow, lived a peculiar tinkerer named Anya. Unlike the stoic clockwork engineers who dominated Aerilon, Anya embraced the whimsical. Her workshop, crammed with mismatched gears and glowing vials, hummed with the music of sprockets and the clang of invention. Her latest creation, perched precariously on a workbench, resembled a cross between a hummingbird and a music box. Its wings, crafted from iridescent beetle elytra, twitched in anticipation.

Anya, with eyes the color of polished brass and hair woven from starlight, wound the key with a reverence reserved for forgotten prayers. The workshop filled with a melody unlike any heard in Aerilon - a tinkling, ethereal song that seemed to dance on the wind. The mechanical hummingbird fluttered to life, its wings shimmering in the dim light. It dipped and soared, the music trailing behind it like a celestial ribbon.

News of Anya's creation spread like wildfire through the hushed streets of Aerilon. Clockwork engineers scoffed, their rigid minds unable to grasp the beauty of the unplanned. But the children, their imaginations free from the shackles of logic, followed the hummingbird's song, their laughter echoing through the twilight.

One day, a cloaked figure arrived at Anya's workshop. It was Elara, the High Cogsmith, her face hidden in shadow. "Your contraption disrupts the order," she declared, her voice cold as clockwork. "It is an aberration."

Anya, unafraid, met Elara's gaze. "Order is not the only melody, High Cogsmith," she said, her voice tinkling like the hummingbird's song. "Sometimes, the most beautiful music comes from the unexpected."

Elara stood silent, the hummingbird's song swirling around them. A flicker of something, perhaps wonder, crossed her shadowed face. Then, with a flick of her cloak, she turned and left.

From that day on, the mechanical hummingbird became a symbol of hope in Aerilon. Its whimsical song, a defiance against the cold logic of the clockwork world, reminded everyone that beauty could bloom even in the most unexpected places. And Anya, the whimsical tinkerer, continued to dream and create, her workshop a beacon of imagination in the perpetual twilight.
In the forgotten city of Aerilon, bathed in the perpetual twilight of a gas giant's shadow, lived a peculiar tinkerer named Anya. Unlike the stoic clockwork engineers who dominated Aerilon, Anya embraced the whimsical. Her workshop, crammed with mismatched gears and glowing vials, hummed with the music of sprockets and the clang of invention. Her latest creation, perched precariously on a workbench, resembled a cross between a hummingbird and a music box. Its wings, crafted from iridescent beetle elytra, twitched in anticipation.

Anya, with eyes the color of polished brass and hair woven from starlight, wound the key with a reverence reserved for forgotten prayers. The workshop filled with a melody unlike any heard in Aerilon - a tinkling, ethereal song that seemed to dance on the wind. The mechanical hummingbird fluttered to life, its wings shimmering in the dim light. It dipped and soared, the music trailing behind it like a celestial ribbon.

News of Anya's creation spread like wildfire through the hushed streets of Aerilon. Clockwork engineers scoffed, their rigid minds unable to grasp the beauty of the unplanned. But the children, their imaginations free from the shackles of logic, followed the hummingbird's song, their laughter echoing through the twilight.

One day, a cloaked figure arrived at Anya's workshop. It was Elara, the High Cogsmith, her face hidden in shadow. "Your contraption disrupts the order," she declared, her voice cold as clockwork. "It is an aberration."

Anya, unafraid, met Elara's gaze. "Order is not the only melody, High Cogsmith," she said, her voice tinkling like the hummingbird's song. "Sometimes, the most beautiful music comes from the unexpected."

Elara stood silent, the hummingbird's song swirling around them. A flicker of something, perhaps wonder, crossed her shadowed face. Then, with a flick of her cloak, she turned and left.

From that day on, the mechanical hummingbird became a symbol of hope in Aerilon. Its whimsical song, a defiance against the cold logic of the clockwork world, reminded everyone that beauty could bloom even in the most unexpected places. And Anya, the whimsical tinkerer, continued to dream and create, her workshop a beacon of imagination in the perpetual twilight.</p>
  </div>
  

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
