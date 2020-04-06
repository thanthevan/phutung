<?php

function listCategory($data, $parent_id = 0, $str = "")
{
    foreach ($data as $val) {

        $id = $val["id"];
        $ten = $val["name"];
        $created_at = date('d/m/Y', strtotime($val['created_at']));
        $photo = '<img width="100" src="' . $val['promo_photo'] . '"/>';
        if ($val['parent_id'] == $parent_id) {
            echo '<tr>';
            if ($str == "") {
                echo '<td ><strong style="color:black;font-weight: bold;font-size:18px">' . $str . '' . '* ' . $ten . '</strong></td>';
                echo '<td style="text-align:center">' . $photo . '</td>';
                echo '<td >' . $created_at . '</td>';
            } else {

                echo '<td style="color:black;font-weight: bold">' . $str . '-' . $ten . '</td>';
                echo '<td style="text-align:center">' . $photo . '</td>';
                echo '<td >' . $created_at . '</td>';
            }
            echo '<td class="list_td aligncenter">
                    <button title="Sửa"  class="edit btn btn-sm btn-warning ud" data-name="' .
                $val["name"] . '" data-id=' . $id . ' data-parent-id=' .
                $val['parent_id'] . '><i class="fas fa-edit"></i></button>
		            <form style="display: inline-block;" action="' . route('delete-product-category', ['id' => $id]) . '" method="post">
                       ' . csrf_field() . '' . method_field('DELETE') . '
                      <button type="submit" title="Xóa" onclick="return confirm(\'Xóa danh mục này ?\'); " class="delete btn btn-sm btn-danger"><i class="fa fa-times-circle"></i></button>
                    </form>
			      </td>
                </tr>';

            listCategory($data, $id, $str . "&nbsp&nbsp&nbsp&nbsp|--");
        }
    }
}
function category($data, $parent_id, $str = ' ', $select)
{
    foreach ($data as $val) {
        $id = $val["id"];
        $ten = $val["name"];
        if ($val['parent_id'] == $parent_id) {

            if ($select != 0 && $id == $select) {

                if ($val['parent_id'] == 0) {
                    echo "<option label='* $ten' value='$id' >";
                } else {
                    echo "<option  selected value='" . $id . "'>" . $str  . $ten . "</option>";
                }
            } else {
                if ($val['parent_id'] == 0) {
                    echo "<option label='* $ten' value='$id'>";
                } else {
                    echo '<option  value="' . $id . '">' . $str . " " . $ten . '</option>';
                }
            }
            category($data, $id, $str . '|--', $select);
        }
    }
}



function showCategories($categories)
{
    $i =1;
    foreach ($categories as  $item) {
          
            if($item['parent_id'] == 0)  {
            echo '<li class="hadsub-menu">';
            echo '<a class="menu-link" href="' . route('category', ['slug' =>  $item['slug']]) . '" title="' . $item['name'] . '">';
            echo '<i class="icon-menu" style="border-radius:50%;background:url('.$item['promo_photo'].');background-repeat: no-repeat;background-size:contain;"></i>';
          
            echo '<h2>' . $item['name'] . '</h2>';
            echo '<span>';
               foreach($categories as $sub1) {
                   if($sub1['parent_id'] == $item['id']) {
                    echo  '<a href="' . route('category', ['slug' =>  $item['slug'].'/'.$sub1['slug']]) . '" title="' . $sub1['name'] . '">' . $sub1['name'] . '</a>,';
                   }
               }
            echo  '</span>';
           echo '</li>';
        } $i++;  
    }
}
