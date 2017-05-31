<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a420428ab07baa005047490b3a2fed5a5d2bd83fba1111e6806c96837ff73032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ec54f52d3d23bc69c561163729f83937be4582717fdd45a9e989570236ff4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec54f52d3d23bc69c561163729f83937be4582717fdd45a9e989570236ff4e3->enter($__internal_2ec54f52d3d23bc69c561163729f83937be4582717fdd45a9e989570236ff4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f372607c9a5f539ff2c83370d23aacb81d807cbed78d2cfb4bc9b5ee736e7db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f372607c9a5f539ff2c83370d23aacb81d807cbed78d2cfb4bc9b5ee736e7db6->enter($__internal_f372607c9a5f539ff2c83370d23aacb81d807cbed78d2cfb4bc9b5ee736e7db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2ec54f52d3d23bc69c561163729f83937be4582717fdd45a9e989570236ff4e3->leave($__internal_2ec54f52d3d23bc69c561163729f83937be4582717fdd45a9e989570236ff4e3_prof);

        
        $__internal_f372607c9a5f539ff2c83370d23aacb81d807cbed78d2cfb4bc9b5ee736e7db6->leave($__internal_f372607c9a5f539ff2c83370d23aacb81d807cbed78d2cfb4bc9b5ee736e7db6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
