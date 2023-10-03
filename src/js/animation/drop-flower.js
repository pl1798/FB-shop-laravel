var svg = Snap("#autumns_tree");
Snap.load("./src/asset/autumn_trees.svg", onSVGLoaded);

async function onSVGLoaded(data){ 
    await svg.append(data);
}

console.log(svg)
