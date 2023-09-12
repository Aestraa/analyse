

<div class="container"><br>

<p style="text-align:center"> 
Recensement des récits</p><br>
<?php if (! empty($recits) && is_array($recits)): ?>
    <table id="exa" class="display" style="width:100%">
    <thead>
        
    <TR>
		<TH> Nom de l'esclave </TH>
        <TH> Date de publication </TH>
        <TH> Titre </TH>
	</TR>

</thead>
<tbody>
    <?php foreach ($recits as $r): ?>
  
<tr>

    <td>
        <p><a href="<?= site_url()."recits/".esc($r['id_recit'], 'url') ?>"><?php echo $r['nom_esc'];?></a></p>
    </td>

    <td>
        <p><?php echo $r['date_publi'];?></p>
    </td>

    <td>
        <p><?php echo $r['titre'];?></p>
    </td>

</tr>

    <?php endforeach ?>
    </tbody>
    </table>
    
    <script>

        $(document).ready(function () {
    $('#exa').DataTable();
});

    </script>

    <?php else: ?>

<h3>No News</h3>
<p>Unable to find any news for you.</p>

<?php endif ?>

<br><br><br>






    </div>

