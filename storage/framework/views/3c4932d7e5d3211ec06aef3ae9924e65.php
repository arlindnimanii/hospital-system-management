<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($name, $params)->html();
} elseif ($_instance->childHasBeenRendered('oUCYMHK')) {
    $componentId = $_instance->getRenderedChildComponentId('oUCYMHK');
    $componentTag = $_instance->getRenderedChildComponentTagName('oUCYMHK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oUCYMHK');
} else {
    $response = \Livewire\Livewire::mount($name, $params);
    $html = $response->html();
    $_instance->logRenderedChild('oUCYMHK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH C:\Users\Admin\Desktop\Hospital\vendor\livewire\livewire\src\Testing/../views/mount-component.blade.php ENDPATH**/ ?>