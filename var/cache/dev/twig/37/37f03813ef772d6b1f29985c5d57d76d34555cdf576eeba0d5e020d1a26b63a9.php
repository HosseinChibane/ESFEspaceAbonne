<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_31424d58aac388b9c9f3eff8b7ddfe180c320706e5257f78aa69494a5c2a94e1 extends Twig_Template
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
        $__internal_46c5897851cb1c07fec5b03ea537f1954b8bba6460def9d2683139cd0d4f51fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c5897851cb1c07fec5b03ea537f1954b8bba6460def9d2683139cd0d4f51fc->enter($__internal_46c5897851cb1c07fec5b03ea537f1954b8bba6460def9d2683139cd0d4f51fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_179602481b682ce8707c6ad249563aa291cc049b890c1c82373aee6a9fee8290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179602481b682ce8707c6ad249563aa291cc049b890c1c82373aee6a9fee8290->enter($__internal_179602481b682ce8707c6ad249563aa291cc049b890c1c82373aee6a9fee8290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_46c5897851cb1c07fec5b03ea537f1954b8bba6460def9d2683139cd0d4f51fc->leave($__internal_46c5897851cb1c07fec5b03ea537f1954b8bba6460def9d2683139cd0d4f51fc_prof);

        
        $__internal_179602481b682ce8707c6ad249563aa291cc049b890c1c82373aee6a9fee8290->leave($__internal_179602481b682ce8707c6ad249563aa291cc049b890c1c82373aee6a9fee8290_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
