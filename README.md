Do the following steps to set up the development environment:

Run npm install from the root directory of your repository.
Run npm run build_dev to generate the development version of the engine and the website.
Run npm start, and then open http://localhost:8080/website in your browser.
Source structure
The source contains the following folders:

assets: Various assets used in the code or in other platforms.
libs: External libraries used by the solution.
sandbox: Various examples mostly for using the engine.
source: Source code of the engine and the website.
engine: Source code of the engine. It doesn't contain any website specific code.
website: Source code of the website.
test: Automatic tests for the engine itself.
tools: Tools for building the library.
website: Static resources for the website.



## Supported file formats

* **Import**: obj, 3ds, stl, ply, gltf, glb, off, 3dm, fbx, dae, wrl, 3mf, ifc, stp, igs, bim.
* **Export**: obj, stl, ply, gltf, glb, off, 3dm, bim.

## Features

- Import model:
  - Select files from a file browser dialog.
  - Drag and drop files from your computer.
  - Specify files by web url.
  - Specify files by web url in hash parameters.
- Explore model:
  - Orbit, pan, zoom.
  - Set up direction.
  - Fit to window.
- Investigate model:
  - List used and missing files.
  - List all materials and meshes.
  - Show/hide and zoom to a specific mesh.
  - List materials used by a specific mesh.
  - Show model information (model size, vertex and polygon count).
  - Show custom properties stored in the model.
- Export model to various format.
- Embed viewer in your website.

## External Libraries

Online 3D Viewer uses these wonderful libraries: [three.js](https://github.com/mrdoob/three.js), [pickr](https://github.com/Simonwep/pickr), [fflate](https://github.com/101arrowz/fflate), [draco](https://github.com/google/draco), [rhino3dm](https://github.com/mcneel/rhino3dm), [web-ifc](https://github.com/tomvandig/web-ifc), [occt-import-js](https://github.com/kovacsv/occt-import-js).
