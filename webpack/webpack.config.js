const { resolve } = require("path");
const glob = require("glob");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const PurgeCSSPlugin = require("purgecss-webpack-plugin");

const exported = {};

exported.mode = "development";

exported.entry = "../src/js/theme.js";

exported.output = {
  filename: "theme.bundle.js",
  path: resolve(__dirname, "../assets/js"),
};

exported.plugins = [
  new MiniCssExtractPlugin({
    filename: "../css/[name].css",
  }),
];

exported.module = {
  rules: [
    {
      test: /\.s?css$/i,
      use: [
        {
          loader: MiniCssExtractPlugin.loader,
          options: {
            publicPath: resolve(__dirname, "../assets/css"),
          },
        },
        "css-loader",
        "sass-loader",
      ],
    },
  ],
};

exported.optimization = {
  minimizer: [`...`, new CssMinimizerPlugin()],
};

module.exports = (env) => {
  if (env.envi == "prod") {
	exported.mode = 'production';

    exported.plugins.push(
      new PurgeCSSPlugin({
        paths: glob.sync(resolve(__dirname, "../*.php")),
      })
    );
  }
  return exported;
};
