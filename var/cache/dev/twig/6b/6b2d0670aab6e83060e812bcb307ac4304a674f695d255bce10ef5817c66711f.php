<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4cf1493991593b339a35ec4ab2ba81846ea21d7edbe0c4d24f4a1814f1b70095 extends Twig_Template
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
        $__internal_d697e9f05c6d81fd2751fb805c9b18260a3fa45a7216e95bcdaa66d229f2ae86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d697e9f05c6d81fd2751fb805c9b18260a3fa45a7216e95bcdaa66d229f2ae86->enter($__internal_d697e9f05c6d81fd2751fb805c9b18260a3fa45a7216e95bcdaa66d229f2ae86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1fc650a29ed17996beecaca656d5c3b04b81c71c8430d7bc75eff8cc4abd4e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc650a29ed17996beecaca656d5c3b04b81c71c8430d7bc75eff8cc4abd4e48->enter($__internal_1fc650a29ed17996beecaca656d5c3b04b81c71c8430d7bc75eff8cc4abd4e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d697e9f05c6d81fd2751fb805c9b18260a3fa45a7216e95bcdaa66d229f2ae86->leave($__internal_d697e9f05c6d81fd2751fb805c9b18260a3fa45a7216e95bcdaa66d229f2ae86_prof);

        
        $__internal_1fc650a29ed17996beecaca656d5c3b04b81c71c8430d7bc75eff8cc4abd4e48->leave($__internal_1fc650a29ed17996beecaca656d5c3b04b81c71c8430d7bc75eff8cc4abd4e48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
