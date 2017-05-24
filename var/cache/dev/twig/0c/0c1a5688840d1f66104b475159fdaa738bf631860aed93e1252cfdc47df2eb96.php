<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e2ab457152b3384f25c41841ae9392db47d41ad3f76dac80fe6fd595df9373ec extends Twig_Template
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
        $__internal_fd68853184e6f99925dac5c92dcc4ba9b911c4566fdd549e575097b099fe6e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd68853184e6f99925dac5c92dcc4ba9b911c4566fdd549e575097b099fe6e48->enter($__internal_fd68853184e6f99925dac5c92dcc4ba9b911c4566fdd549e575097b099fe6e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5b5cec1d812a0319402662ec555ea040aea533d89a88b32d80bb87e6878c4b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5cec1d812a0319402662ec555ea040aea533d89a88b32d80bb87e6878c4b32->enter($__internal_5b5cec1d812a0319402662ec555ea040aea533d89a88b32d80bb87e6878c4b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fd68853184e6f99925dac5c92dcc4ba9b911c4566fdd549e575097b099fe6e48->leave($__internal_fd68853184e6f99925dac5c92dcc4ba9b911c4566fdd549e575097b099fe6e48_prof);

        
        $__internal_5b5cec1d812a0319402662ec555ea040aea533d89a88b32d80bb87e6878c4b32->leave($__internal_5b5cec1d812a0319402662ec555ea040aea533d89a88b32d80bb87e6878c4b32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
