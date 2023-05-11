import path from "path";
import { defineConfig } from "vite";

export default defineConfig(() => {
  return {
    shared: { publicDir: false },
    build: {
      report: true,
      assetsInlineLimit: 0,
      rollupOptions: {
        input: {
          main: path.resolve(__dirname, "index.html"),
          auth: path.resolve(__dirname, "src/rk/auth.html"),
        },
      },
    },
  };
});
