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
        $__internal_d4a7e6b529982d87ffac0b675fc9f1124febae0085139094af0599cc2d03c092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a7e6b529982d87ffac0b675fc9f1124febae0085139094af0599cc2d03c092->enter($__internal_d4a7e6b529982d87ffac0b675fc9f1124febae0085139094af0599cc2d03c092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7cd925d462618175af5c75a7f771d5c7aa8b93bac8b8ac0153d1d750ef1fbfda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd925d462618175af5c75a7f771d5c7aa8b93bac8b8ac0153d1d750ef1fbfda->enter($__internal_7cd925d462618175af5c75a7f771d5c7aa8b93bac8b8ac0153d1d750ef1fbfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d4a7e6b529982d87ffac0b675fc9f1124febae0085139094af0599cc2d03c092->leave($__internal_d4a7e6b529982d87ffac0b675fc9f1124febae0085139094af0599cc2d03c092_prof);

        
        $__internal_7cd925d462618175af5c75a7f771d5c7aa8b93bac8b8ac0153d1d750ef1fbfda->leave($__internal_7cd925d462618175af5c75a7f771d5c7aa8b93bac8b8ac0153d1d750ef1fbfda_prof);

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
