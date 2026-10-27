<?php
defined( 'ABSPATH' ) || exit; // Exit if accessed directly.

if ( ! function_exists( 'safelayout_preloader_set_brand' ) ) {

	// Return brand css
	function safelayout_preloader_set_brand( $options ) {
		?>
		.sl-pl-brand {
			display: inline-block;
			height: auto;
			max-width: 100%;
		}
		.sl-pl-brand-container div {
			display: inline-block;
		}
		.sl-pl-brand-container,
		.sl-pl-brand-container div {
			perspective: 300px;
			-webkit-perspective: 300px;
			position: relative;
			text-align: center;
		}
		#sl-pl-brand-parent {
			width: 100%;
		}
		<?php
		switch ( $options ) {
			case 'bounce':
				?>
				#sl-pl-brand-bounce {
					animation: sl-pl-bounce-anim 1.2s linear infinite;
					-webkit-animation: sl-pl-bounce-anim 1.2s linear infinite;
					transform-origin: 50% 100%;
					-webkit-transform-origin: 50% 100%;
				}
				@-webkit-keyframes sl-pl-bounce-anim {
					0% {
						-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
						-webkit-transform: translate(0, 0) scale(1, 1);
					}
					40% {
						-webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
						-webkit-transform: translate(0, -150%) scale(0.8, 1.2);
					}
					70% {
						-webkit-transform: scale(1, 1);
					}
					85% {
						-webkit-transform: translate(0, 0) scale(1.4, 0.6);
					}
					95% {
						-webkit-transform: scale(1, 1);
					}
				}
				@keyframes sl-pl-bounce-anim {
					0% {
						animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
						transform: translate(0, 0) scale(1, 1);
					}
					40% {
						animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
						transform: translate(0, -150%) scale(0.8, 1.2);
					}
					70% {
						transform: scale(1, 1);
					}
					85% {
						transform: translate(0, 0) scale(1.4, 0.6);
					}
					95% {
						transform: scale(1, 1);
					}
				}
				<?php
				break;
			case 'yoyo':
				?>
				#sl-pl-brand-yoyo {
					animation: sl-pl-yoyo-anim 1s ease-in infinite;
					-webkit-animation: sl-pl-yoyo-anim 1s ease-in infinite;
				}
				@-webkit-keyframes sl-pl-yoyo-anim {
					50% {
						-webkit-transform: translate(-2px, -2px);
					}
					0%,
					100% {
						-webkit-transform: translate(0, 0);
					}
				}
				@keyframes sl-pl-yoyo-anim {
					50% {
						transform: translate(-2px, -2px);
					}
					0%,
					100% {
						transform: translate(0, 0);
					}
				}
				<?php
				break;
			case 'swing':
				?>
				#sl-pl-brand-swing {
					animation: sl-pl-swing-anim 1s linear infinite;
					-webkit-animation: sl-pl-swing-anim 1s linear infinite;
				}
				@-webkit-keyframes sl-pl-swing-anim {
					20% {
						-webkit-transform: rotate(15deg);
					}
					40% {
						-webkit-transform: rotate(-10deg);
					}
					60% {
						-webkit-transform: rotate(5deg);
					}
					80% {
						-webkit-transform: rotate(-5deg);
					}
					100% {
						-webkit-transform: rotate(0);
					}
				}
				@keyframes sl-pl-swing-anim {
					20% {
						transform: rotate(15deg);
					}
					40% {
						transform: rotate(-10deg);
					}
					60% {
						transform: rotate(5deg);
					}
					80% {
						transform: rotate(-5deg);
					}
					100% {
						transform: rotate(0);
					}
				}
				<?php
				break;
			case 'light-move':
				?>
				#sl-pl-brand-light-move {
					display: inline-block;
					line-height: 0;
					overflow: hidden;
					position: relative;
					width: fit-content;
				}
				#sl-pl-brand-light-move:after {
					animation: sl-pl-light-move-anim 3.5s linear 0.7s infinite;
					-webkit-animation: sl-pl-light-move-anim 3.5s linear 0.7s infinite;
					background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.45) 12%, rgba(255, 255, 255, 0)24%);
					content: "";
					display: inline-block;
					height: 100%;
					left: -150%;
					position: absolute;
					top: 0;
					transform: translateX(0px) skewX(-45deg);
					-webkit-transform: translateX(0px) skewX(-45deg);
					width: 100%;
				}
				@-webkit-keyframes sl-pl-light-move-anim {
					0% {
						-webkit-transform: translateX(0) skewX(-45deg);
					}
					40%, 100% {
						-webkit-transform: translateX(400%) skewX(-45deg);
					}
				}
				@keyframes sl-pl-light-move-anim {
					0% {
						transform: translateX(0) skewX(-45deg);
					}
					40%, 100% {
						transform: translateX(400%) skewX(-45deg);
					}
				}
				<?php
				break;
			case 'flash':
				?>
				#sl-pl-brand-flash {
					animation: sl-pl-flash-anim 4s cubic-bezier(0.4, 0, 0.2, 1) infinite;
					-webkit-animation: sl-pl-flash-anim 4s cubic-bezier(0.4, 0, 0.2, 1) infinite;
				}
				@-webkit-keyframes sl-pl-flash-anim {
					24%, 43% {
						opacity: 0.2;
					}
					20%, 30%, 35%, 49% {
						opacity: 1;
					}
				}
				@keyframes sl-pl-flash-anim {
					24%, 43% {
						opacity: 0.2;
					}
					20%, 30%, 35%, 49% {
						opacity: 1;
					}
				}
				<?php
				break;
			case 'rotate-2D':
				?>
				#sl-pl-brand-rotate-2D {
					animation: sl-pl-rotate-2D-anim 3s cubic-bezier(0.2, 0.95, 0.45, 1.15) infinite;
					-webkit-animation: sl-pl-rotate-2D-anim 3s cubic-bezier(0.2, 0.95, 0.45, 1.15) infinite;
				}
				@-webkit-keyframes sl-pl-rotate-2D-anim {
					0% {
						-webkit-transform: rotate(0);
					}
					60%, 100% {
						-webkit-transform: rotate(360deg);
					}
				}
				@keyframes sl-pl-rotate-2D-anim {
					0% {
						transform: rotate(0);
					}
					60%, 100% {
						transform: rotate(360deg);
					}
				}
				<?php
				break;
			case 'rotate-3D-X':
				?>
				#sl-pl-brand-rotate-3D-X {
					animation: sl-pl-rotate-3D-X-anim 2.2s cubic-bezier(0.3, 0, 0.45, 1) infinite;
					-webkit-animation: sl-pl-rotate-3D-X-anim 2.2s cubic-bezier(0.3, 0, 0.45, 1) infinite;
				}
				@-webkit-keyframes sl-pl-rotate-3D-X-anim {
					0% {
						-webkit-transform: rotateX(360deg);
					}
					60%, 100% {
						-webkit-transform: rotateX(0);
					}
				}
				@keyframes sl-pl-rotate-3D-X-anim {
					0% {
						transform: rotateX(360deg);
					}
					60%, 100% {
						transform: rotateX(0);
					}
				}
				<?php
				break;
			case 'rotate-3D-Y':
				?>
				#sl-pl-brand-rotate-3D-Y {
					animation: sl-pl-rotate-3D-Y-anim 2.2s cubic-bezier(0.3, 0, 0.45, 1) infinite;
					-webkit-animation: sl-pl-rotate-3D-Y-anim 2.2s cubic-bezier(0.3, 0, 0.45, 1) infinite;
				}
				@-webkit-keyframes sl-pl-rotate-3D-Y-anim {
					0% {
						-webkit-transform: rotateY(360deg);
					}
					60%, 100% {
						-webkit-transform: rotateY(0);
					}
				}
				@keyframes sl-pl-rotate-3D-Y-anim {
					0% {
						transform: rotateY(360deg);
					}
					60%, 100% {
						transform: rotateY(0);
					}
				}
				<?php
				break;
			case 'parts01':
				?>
				.sl-pl-brand-parts01 {
					animation: sl-pl-parts01-anim 4.8s linear infinite;
					-webkit-animation: sl-pl-parts01-anim 4.8s linear infinite;
					transform-origin: 65% 14% 29px;
					-webkit-transform-origin: 65% 14% 29px;
				}
				@-webkit-keyframes sl-pl-parts01-anim {
					0%, 5%, 85%, 100% {
						-webkit-transform: rotateZ(0) rotateX(0) rotateY(0) scale(3, 3);
						opacity: 0;
					}
					28%, 75% {
						-webkit-transform: rotateZ(-360deg) rotateX(-360deg) rotateY(-360deg) scale(1, 1);
						opacity: 1;
					}
				}
				@keyframes sl-pl-parts01-anim {
					0%, 5%, 85%, 100% {
						transform: rotateZ(0) rotateX(0) rotateY(0) scale(3, 3);
						opacity: 0;
					}
					28%, 75% {
						transform: rotateZ(-360deg) rotateX(-360deg) rotateY(-360deg) scale(1, 1);
						opacity: 1;
					}
				}
				<?php
				break;
			case 'parts02':
				?>
				.sl-pl-brand-parts02 {
					animation: sl-pl-parts02-anim 4.8s linear infinite;
					-webkit-animation: sl-pl-parts02-anim 4.8s linear infinite;
					transform-origin: 96% 66% 12px;
					-webkit-transform-origin: 96% 66% 12px;
				}
				@-webkit-keyframes sl-pl-parts02-anim {
					0%, 5%, 85%, 100% {
						-webkit-transform: rotateX(360deg) rotateY(-360deg) rotateZ(360deg) scale(2, 2) translate(10px ,-10px);
						opacity: 0;
					}
					28%, 75% {
						-webkit-transform: rotateX(0) rotateY(0) rotateZ(0) scale(1, 1) translate(0 ,0);
						opacity: 1;
					}
				}
				@keyframes sl-pl-parts02-anim {
					0%, 5%, 85%, 100% {
						transform: rotateX(360deg) rotateY(-360deg) rotateZ(360deg) scale(2, 2) translate(10px ,-10px);
						opacity: 0;
					}
					28%, 75% {
						transform: rotateX(0) rotateY(0) rotateZ(0) scale(1, 1) translate(0 ,0);
						opacity: 1;
					}
				}
				<?php
				break;
			case 'parts03':
				?>
				.sl-pl-brand-parts03 {
					animation: sl-pl-parts03-anim 4.8s linear infinite;
					-webkit-animation: sl-pl-parts03-anim 4.8s linear infinite;
					transform-origin: 102% 31% 25px;
					-webkit-transform-origin: 102% 31% 25px;
				}
				@-webkit-keyframes sl-pl-parts03-anim {
					0%, 5%, 85%, 100% {
						-webkit-transform: rotateX(660deg) rotateY(0) rotateZ(0) scale(0, 3) translate(0 ,0);
						opacity: 0;
					}
					28%, 75% {
						-webkit-transform: rotateX(0) rotateY(0) rotateZ(0) scale(1, 1) translate(0 ,0);
						opacity: 1;
					}
				}
				@keyframes sl-pl-parts03-anim {
					0%, 5%, 85%, 100% {
						transform: rotateX(660deg) rotateY(0) rotateZ(0) scale(0, 3) translate(0 ,0);
						opacity: 0;
					}
					28%, 75% {
						transform: rotateX(0) rotateY(0) rotateZ(0) scale(1, 1) translate(0 ,0);
						opacity: 1;
					}
				}
				<?php
				break;
			case 'rising-opacity-to-left':
				?>
				@property --sl-pl-brand-rising-step {
					syntax: '<number>';
					inherits: true;
					initial-value: 0;
				}
				.sl-pl-brand .sl-pl-brand-rising-opacity-to-left {
					animation: sl-pl-rising-opacity-to-left-anim 4s linear infinite;
					-webkit-animation: sl-pl-rising-opacity-to-left-anim 4s linear infinite;
					opacity: clamp(0.2, 0.2 + (var(--sl-pl-brand-rising-step) - (var(--i) - 1)) * 0.8, 1);
				}
				.sl-pl-brand .sl-pl-brand-rising-opacity-to-left:nth-child(1) { --i: 8; }
				.sl-pl-brand .sl-pl-brand-rising-opacity-to-left:nth-child(2) { --i: 7; }
				.sl-pl-brand .sl-pl-brand-rising-opacity-to-left:nth-child(3) { --i: 6; }
				.sl-pl-brand .sl-pl-brand-rising-opacity-to-left:nth-child(4) { --i: 5; }
				.sl-pl-brand .sl-pl-brand-rising-opacity-to-left:nth-child(5) { --i: 4; }
				.sl-pl-brand .sl-pl-brand-rising-opacity-to-left:nth-child(6) { --i: 3; }
				.sl-pl-brand .sl-pl-brand-rising-opacity-to-left:nth-child(7) { --i: 2; }
				.sl-pl-brand .sl-pl-brand-rising-opacity-to-left:nth-child(8) { --i: 1; }

				@-webkit-keyframes sl-pl-rising-opacity-to-left-anim {
					0%, 5% {
						--sl-pl-brand-rising-step: 0;
					}
					70% {
						--sl-pl-brand-rising-step: 8;
					}
					99.9% {
						--sl-pl-brand-rising-step: 8;
					}
					100% {
						--sl-pl-brand-rising-step: 0;
					}
				}
				@keyframes sl-pl-rising-opacity-to-left-anim {
					0%, 5% {
						--sl-pl-brand-rising-step: 0;
					}
					70% {
						--sl-pl-brand-rising-step: 8;
					}
					99.9% {
						--sl-pl-brand-rising-step: 8;
					}
					100% {
						--sl-pl-brand-rising-step: 0;
					}
				}
				<?php
				break;
		}//end of switch
	}
}