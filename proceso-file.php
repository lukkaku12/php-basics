<?php

print $_FILES['archivo']['name'];
move_uploaded_file($_FILES['archivo']['tmp_name'], 'files/' . $_FILES['archivo']['name']);