<!-- All functions related to articles. -->
<?php
/**
 * Get the article record based on the ID
 * 
 * @param object $conn Connection to the database
 * @param integer $id the article ID
 * @params string $columns Optional list of coluns for the select, default to *
 * 
 * @return mixed An associative array containing the article with the ID, or null if not found.
 */
function getArticle($conn, $id, $columns = '*') {

  $sql = "SELECT $columns
          FROM article
          WHERE id = :id";
  
  $stmt = $conn->prepare($sql);

  $stmt->bindValue(':id', $id, PDO::PARAM_INT);

  if ($stmt->execute()) {

    return $stmt->fetch(PDO::FETCH_ASSOC);

  }  
}