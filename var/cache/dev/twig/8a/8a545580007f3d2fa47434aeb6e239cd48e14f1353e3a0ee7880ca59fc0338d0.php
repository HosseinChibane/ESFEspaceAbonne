<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9d6d347575b2b64a7405a1c4518e6f518f3e3d21b589b065f2eb8fe9e2848b55 extends Twig_Template
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
        $__internal_cd25b08fb1e8dc7bce8f8d7ddaf79dc6490ff90ab951839e883bd26d36a05257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd25b08fb1e8dc7bce8f8d7ddaf79dc6490ff90ab951839e883bd26d36a05257->enter($__internal_cd25b08fb1e8dc7bce8f8d7ddaf79dc6490ff90ab951839e883bd26d36a05257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_cd2b74c4406d06ce952f3988b68ed4e485f859dfa75482b154282210b62834d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2b74c4406d06ce952f3988b68ed4e485f859dfa75482b154282210b62834d2->enter($__internal_cd2b74c4406d06ce952f3988b68ed4e485f859dfa75482b154282210b62834d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cd25b08fb1e8dc7bce8f8d7ddaf79dc6490ff90ab951839e883bd26d36a05257->leave($__internal_cd25b08fb1e8dc7bce8f8d7ddaf79dc6490ff90ab951839e883bd26d36a05257_prof);

        
        $__internal_cd2b74c4406d06ce952f3988b68ed4e485f859dfa75482b154282210b62834d2->leave($__internal_cd2b74c4406d06ce952f3988b68ed4e485f859dfa75482b154282210b62834d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
