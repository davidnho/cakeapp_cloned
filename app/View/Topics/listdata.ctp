<h2>Topics</h2>
<table>
    <tr>
        
        <th>Title</th>
        <th>Created</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    <?php foreach ($topics as $topic): ?>
        <tr>
        
            <td><?php echo $this->HTML->link($topic['Topic']['title'],array('controller'=>'topics','action'=>'viewdata',$topic['Topic']['id']) ); ?> </td>
            
            <td><?php echo $topic['Topic']['created']; ?> </td>
            <td><?php echo $this->HTML->link('Edit',array('controller'=>'topics','action'=>'editdata',$topic['Topic']['id']) ); ?> </td>
            <td><?php echo $this->Form->postLink('Delete',array('controller'=>'topics','action'=>'deletedata',$topic['Topic']['id']),array('confirm'=>'Are you sure you want to delete this topic?') ); ?> </td>
        </tr>
    <?php endforeach; ?>   
    <?php unset($topic); ?>    
</table>
