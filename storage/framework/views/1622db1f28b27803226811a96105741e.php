<div>
    <div>
        <div id='calendar-container' wire:ignore>
            <div id='calendar'></div>
        </div>
    </div>
    <?php $__env->startPush('scripts'); ?>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js'></script>

        <script>
            document.addEventListener('livewire:load', function() {
                var Calendar = FullCalendar.Calendar;
                var Draggable = FullCalendar.Draggable;
                var calendarEl = document.getElementById('calendar');
                var checkbox = document.getElementById('drop-remove');
                var data =   window.livewire.find('<?php echo e($_instance->id); ?>').events;
                var calendar = new Calendar(calendarEl, {
                    events: JSON.parse(data),
                    dateClick(info)  {
                        var title = prompt('ادخل عنوان الحدث ');
                        var date = new Date(info.dateStr + 'T00:00:00');
                        if(title != null && title != ''){
                            calendar.addEvent({
                                title: title,
                                start: date,
                                allDay: true
                            });
                            var eventAdd = {title: title,start: date};
                        window.livewire.find('<?php echo e($_instance->id); ?>').addevent(eventAdd);
                            alert('تم اضافة الحدث بنجاح');
                        }else{
                            alert('من فضلك ادخل عنوان الحدث');
                        }
                    },
                    editable: true,
                    selectable: true,
                    displayEventTime: false,
                    droppable: true, // this allows things to be dropped onto the calendar
                    drop: function(info) {
                        // is the "remove after drop" checkbox checked?
                        if (checkbox.checked) {
                            // if so, remove the element from the "Draggable Events" list
                            info.draggedEl.parentNode.removeChild(info.draggedEl);
                        }
                    },
                    eventDrop: info => window.livewire.find('<?php echo e($_instance->id); ?>').eventDrop(info.event, info.oldEvent),
                    loading: function(isLoading) {
                        if (!isLoading) {
                            // Reset custom events
                            this.getEvents().forEach(function(e){
                                if (e.source === null) {
                                    e.remove();
                                }
                            });
                        }
                    }
                });
                calendar.render();
            window.livewire.find('<?php echo e($_instance->id); ?>').on(`refreshCalendar`, () => {
                calendar.refetchEvents()
            });
            });
        </script>
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />
    <?php $__env->stopPush(); ?>
</div>
<?php /**PATH C:\xampp\htdocs\Tripoli_University\resources\views/livewire/calendar.blade.php ENDPATH**/ ?>