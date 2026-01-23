import { __ } from "@wordpress/i18n";
import { useBlockProps, InspectorControls, MediaUpload, MediaUploadCheck } from "@wordpress/block-editor";
import { PanelBody, TextControl, Button, PanelRow } from "@wordpress/components";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
	const { bgImage, title } = attributes;
	return (
		<>
			<InspectorControls>
				<PanelBody title={__("Hero Section", "hero-section")}>
					<PanelRow>
						<MediaUploadCheck>
							<MediaUpload
								onSelect={(media) => setAttributes({ bgImage: media.url })}
								allowedTypes={["image"]}
								value={bgImage}
								render={({ open }) =>
									bgImage ? (
										<div>
											<img
												src={bgImage}
												alt=""
											/>
											<Button
												onClick={open}
												variant="primary">
												Replace Image
											</Button>
											<Button
												onClick={() => setAttributes({ bgImage: "" })}
												variant="tertiary"
												isDestructive>
												Remove
											</Button>
										</div>
									) : (
										<Button
											onClick={open}
											variant="primary">
											Upload Background Image
										</Button>
									)
								}
							/>
						</MediaUploadCheck>
					</PanelRow>
					<PanelRow>
						<TextControl
							label={__("Title", "hero-section")}
							value={title || ""}
							onChange={(value) => setAttributes({ title: value })}
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>

			<div
				{...useBlockProps()}
				style={{
					backgroundImage: "url(" + bgImage + ")",
					backgroundPosition: "center",
					backgroundSize: "cover",
					backgroundRepeat: "no-repeat",
				}}>
				<h1 className="hero-section__title">{title || __("Title")}</h1>
			</div>
		</>
	);
}
