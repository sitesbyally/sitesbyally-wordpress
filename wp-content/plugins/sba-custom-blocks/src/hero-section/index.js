import { registerBlockType } from "@wordpress/blocks";
import "./style.scss";
import Edit from "./edit";
import metadata from "./block.json";

const sectionIcon = (
	<svg
		xmlns="http://www.w3.org/2000/svg"
		viewBox="0 0 24 24"
		width="48"
		height="48"
		aria-hidden="true"
		focusable="false">
		<path d="M5 4h14v11H5V4Zm11 16H8v-1.5h8V20Z"></path>
	</svg>
);

registerBlockType(metadata.name, {
	icon: sectionIcon,
	edit: Edit,
});
