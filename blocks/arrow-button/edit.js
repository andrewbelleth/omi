(function (wp) {
  const { registerBlockType } = wp.blocks;
  const { useBlockProps, RichText, InspectorControls } = wp.blockEditor;
  const { PanelBody, TextControl, ToggleControl } = wp.components;
  const { createElement: el, Fragment } = wp.element;

  const arrowIcon = el(
    "span",
    { className: "btn__icon", "aria-hidden": "true" },
    el(
      "svg",
      {
        viewBox: "0 0 23 23",
        fill: "none",
        xmlns: "http://www.w3.org/2000/svg",
      },
      el("path", {
        d: "M13.6814 18.9216L12.2322 17.4304L17.4836 12.1789H0.830322V10.1164H17.4836L12.2322 4.86497L13.6814 3.37378L21.4553 11.1477L13.6814 18.9216Z",
        fill: "#0068B6",
      })
    )
  );

  registerBlockType("omi/arrow-button", {
    edit: function (props) {
      const { attributes, setAttributes } = props;
      const { text, url, linkTarget } = attributes;
      const blockProps = useBlockProps({
        className: "wp-block-omi-arrow-button",
      });
      const opensInNewTab = linkTarget === "_blank";

      return el(
        Fragment,
        null,
        el(
          InspectorControls,
          null,
          el(
            PanelBody,
            { title: "リンク設定", initialOpen: true },
            el(TextControl, {
              label: "リンク先URL",
              value: url,
              onChange: function (value) {
                setAttributes({ url: value });
              },
              type: "url",
              placeholder: "https://",
              __nextHasNoMarginBottom: true,
            }),
            el(ToggleControl, {
              label: "新しいタブで開く",
              checked: opensInNewTab,
              onChange: function (value) {
                setAttributes({
                  linkTarget: value ? "_blank" : "",
                  rel: value ? "noopener noreferrer" : "",
                });
              },
              __nextHasNoMarginBottom: true,
            })
          )
        ),
        el(
          "div",
          blockProps,
          el(
            "div",
            {
              className: "btn",
              role: "presentation",
            },
            el(RichText, {
              tagName: "span",
              className: "btn__text",
              value: text,
              allowedFormats: [],
              placeholder: "ボタンテキスト",
              onChange: function (value) {
                setAttributes({ text: value });
              },
            }),
            arrowIcon
          )
        )
      );
    },
    save: function () {
      return null;
    },
  });
})(window.wp);
