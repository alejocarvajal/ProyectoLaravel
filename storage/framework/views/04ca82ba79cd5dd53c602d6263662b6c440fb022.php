<?php if($options['user'] && $options['place']): ?>

	var service = new google.maps.places.PlacesService(<?php echo $options['map']; ?>);
	var request = {
		placeId: '<?php echo $options['place']; ?>'
	};

	service.getDetails(request, function(placeResult, status) {
		if (status != google.maps.places.PlacesServiceStatus.OK) {
			alert('Unable to find the Place details.');
			return;
		}

<?php endif; ?>

var markerPosition_<?php echo $id; ?> = new google.maps.LatLng(<?php echo $options['latitude']; ?>, <?php echo $options['longitude']; ?>);

var marker_<?php echo $id; ?> = new google.maps.Marker({
	position: markerPosition_<?php echo $id; ?>,
	<?php if($options['user'] && $options['place']): ?>
		place: {
			placeId: '<?php echo $options['place']; ?>',
			location: { lat: <?php echo $options['latitude']; ?>, lng: <?php echo $options['longitude']; ?> }
		},
		attribution: {
			source: document.title,
			webUrl: document.URL
		},
	<?php endif; ?>
		
	<?php if(isset($options['draggable']) && $options['draggable'] == true): ?>
		draggable:true,
	<?php endif; ?>
	
	title: <?php echo json_encode($options['title']); ?>,
	animation: <?php if(empty($options['animation']) || $options['animation'] == 'NONE'): ?> '' <?php else: ?> google.maps.Animation.<?php echo $options['animation']; ?> <?php endif; ?>,
	<?php if($options['symbol']): ?>
		icon: {
			path: google.maps.SymbolPath.<?php echo $options['symbol']; ?>,
			scale: <?php echo $options['scale']; ?>

		}
	<?php else: ?>
		icon: '<?php echo $options['icon']; ?>'
	<?php endif; ?>
});

bounds.extend(marker_<?php echo $id; ?>.position);

marker_<?php echo $id; ?>.setMap(<?php echo $options['map']; ?>);
markers.push(marker_<?php echo $id; ?>);

<?php if($options['user'] && $options['place']): ?>

		marker_<?php echo $id; ?>.addListener('click', function() {
			infowindow.setContent('<a href="' + placeResult.website + '">' + placeResult.name + '</a>');
			infowindow.open(<?php echo $options['map']; ?>, this);
		});
	});

<?php else: ?>

	<?php if(!empty($options['content'])): ?>

		var infowindow_<?php echo $id; ?> = new google.maps.InfoWindow({
			content: <?php echo json_encode($options['content']); ?>

		});

		<?php if(isset($options['maxWidth'])): ?>

			infowindow_<?php echo $id; ?>.setOptions({ maxWidth: <?php echo $options['maxWidth']; ?> });

		<?php endif; ?>

		<?php if(isset($options['open']) && $options['open']): ?>

			infowindow_<?php echo $id; ?>.open(<?php echo $options['map']; ?>, marker_<?php echo $id; ?>);

		<?php endif; ?>

		google.maps.event.addListener(marker_<?php echo $id; ?>, 'click', function() {

			<?php if(isset($options['autoClose']) && $options['autoClose']): ?>

				for (var i = 0; i < infowindows.length; i++) {
					infowindows[i].close();
				}

			<?php endif; ?>

			infowindow_<?php echo $id; ?>.open(<?php echo $options['map']; ?>, marker_<?php echo $id; ?>);
		});

		infowindows.push(infowindow_<?php echo $id; ?>);

	<?php endif; ?>

<?php endif; ?>

<?php $__currentLoopData = ['eventClick', 'eventRightClick', 'eventMouseOver', 'eventMouseDown', 'eventMouseUp', 'eventMouseOut', 'eventDrag', 'eventDragStart', 'eventDragEnd']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

	<?php if(isset($options[$event])): ?>

		google.maps.event.addListener(marker_<?php echo $id; ?>, '<?php echo str_replace('event', '', strtolower($event)); ?>', function (event) {
			<?php echo $options[$event]; ?>

		});

	<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
