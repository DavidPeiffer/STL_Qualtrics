<html>
    <body>
        <table>
            <tr>
                <td><h1>A</h1></td>
                <!--<?php
                /*echo "<td><script src=\"https://embed.github.com/view/3d/skalnik/secret-bear-clip/master/stl/";
            	echo $_GET["LeftModel"] ;

            	echo ".stl?height=250&width=500\"></script></td>" */?>-->

            	<?php echo "<td><script src=\"https://embed.github.com/view/3d/DavidPeiffer/stl-models/master/" . $_GET["LeftModel"] . ".stl\"></script></td>"; ?>


            </tr>
            <tr>
                <td><h1>B</h1></td>
                <!--<td><script src="https://embed.github.com/view/3d/skalnik/secret-bear-clip/master/stl/clip.stl?height=250&width=500"></script></td>-->
                <?php echo "<td><script src=\"https://embed.github.com/view/3d/DavidPeiffer/stl-models/master/" . $_GET["RightModel"] . ".stl\"></script></td>"; ?>
            </tr>
        </table>
    </body>
</html>