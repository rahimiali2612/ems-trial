<?php $__env->startSection('title','Pulse'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
	<!-- Pulse Small -->
	<div class="row">
		<div class="col s12">
			<div id="pulse-small" class="card card-tabs">
				<div class="card-content">
					<div class="card-title">
						<div class="row">
							<div class="col s12 m6 l10">
								<h4 class="card-title">Pulse Small</h4>
							</div>
							<div class="col s12 m6 l2">
								<ul class="tabs row">
									<li class="tab col s6 p-0"><a class="active p-0" href="#view-plus-small">View</a>
									</li>
									<li class="tab col s6 p-0"><a class="p-0" href="#html-pulse-small">Html</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div id="view-plus-small">
						<div class="row">
							<div class="col s12">
								<div class="row">
									<p>Draw attention to your buttons with this subtle but captivating effect. Just add
										the
										class " pulse " to your
										button. Note: This is meant for floating buttons, so it may not work perfectly
										with
										every component.</p>
									<div class="pulse-style-one padding-3">
										<a class="btn btn-floating pulse">
											<i class="material-icons">menu</i>
										</a>
										<a class="btn btn-floating btn-large pulse">
											<i class="material-icons">cloud</i>
										</a>
										<a class="btn btn-floating btn-large cyan pulse">
											<i class="material-icons">edit</i>
										</a>
									</div>
									<p class="mb-3">When you use a small pulse you don't need to use any class</p>
								</div>
							</div>
						</div>
					</div>
					<div id="html-pulse-small">
						<pre><code class="language-markup">
&lt;a class="btn btn-floating pulse">&lt;i class="material-icons">menu&lt;/i>&lt;/a>
&lt;a class="btn btn-floating btn-large pulse">&lt;i class="material-icons">cloud&lt;/i>&lt;/a>
&lt;a class="btn btn-floating btn-large cyan pulse">&lt;i class="material-icons">edit&lt;/i>&lt;/a>
</code></pre>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Image Pulse -->
	<div class="row">
		<div class="col s12">
			<div id="gradient-pulse-large" class="card card-tabs">
				<div class="card-content">
					<div class="card-title">
						<div class="row">
							<div class="col s12 m6 l10">
								<h4 class="card-title">Image Pulse</h4>
							</div>
							<div class="col s12 m6 l2">
								<ul class="tabs">
									<li class="tab col s6 p-0"><a class="active p-0" href="#view-pulse-large">View</a>
									</li>
									<li class="tab col s6 p-0"><a class="p-0" href="#html-pulse-large">Html</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div id="view-pulse-large">
						<div class="pulse-style-one padding-3">
							<a class="btn btn-floating pulse btn-large">
								<img src="<?php echo e(asset('images/gallery/43.png')); ?>" class="responsive-img mb-10 circle" alt="">
							</a>
							<a class="btn btn-floating pulse btn-large">
								<img src="<?php echo e(asset('images/gallery/37.png')); ?>" class="responsive-img mb-10 circle" alt="">
							</a>
							<a class="btn btn-floating pulse btn-large">
								<img src="<?php echo e(asset('images/gallery/36.png')); ?>" class="responsive-img mb-10 circle" alt="">
							</a>
						</div>
					</div>
					<div id="html-pulse-large">
						<pre><code class="language-markup">
&lt;div class=&quot;pulse-style-one padding-3&quot;&gt;
&lt;a class=&quot;btn btn-floating pulse btn-large&quot;&gt;
&lt;img src=&quot;../../../images/gallery/43.png&quot; class=&quot;responsive-img mb-10 circle&quot;&gt;
&lt;/a&gt;
&lt;a class=&quot;btn btn-floating pulse btn-large&quot;&gt;
&lt;img src=&quot;../../../images/gallery/37.png&quot; class=&quot;responsive-img mb-10 circle&quot;&gt;
&lt;/a&gt;
&lt;a class=&quot;btn btn-floating pulse btn-large&quot;&gt;
&lt;img src=&quot;../../../images/gallery/36.png&quot; class=&quot;responsive-img mb-10 circle&quot;&gt;
&lt;/a&gt;
&lt;/div&gt;
</code></pre>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/pages/css-pulse.blade.php ENDPATH**/ ?>